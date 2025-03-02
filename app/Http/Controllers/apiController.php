<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon;

class apiController extends Controller
{
    public function manifest()
    {
        $client = new Client();
        $url = "http://10.14.55.243:9020/listmanifest";
        $data = [
            'username'  => 'adminapi',
            'password' => 'admin123',
            'pUploadDate' => Carbon::today()->format('Ymd'), // Gunakan tanggal hari ini
            'pManifest' => '',
        ];

        try {
            $response = $client->post($url, [
                'json' => $data,
                'headers' => [
                    'Accept' => 'manifest/json',
                    'Content-Type' => 'application/json',
                ],
                'connect_timeout' => 5,
            ]);
            $body = $response->getBody()->getContents();
            $response = json_decode($body, true);

            usort($response, function ($a, $b) {
                return $a['Dock'] <=> $b['Dock'];
            });

            // Filter data berdasarkan tanggal hari ini
            $filteredData = array_filter($response, function ($item) {
                $uploadDate = Carbon::createFromFormat('Ymd', $item['Date_delivery']);
                return $uploadDate->isToday(); // Memastikan hanya data yang memiliki tanggal hari ini yang ditampilkan
            });

            // Grouping berdasarkan Dock dan Manifest
            $groupedByDock = [];
            foreach ($filteredData as $item) {
                $dock = $item['Dock'];
                $groupedByDock[$dock][] = $item;
            }

            $groupedByDockAndManifest = [];
            foreach ($groupedByDock as $dock => $items) {
                foreach ($items as $item) {
                    $manifestNo = $item['Manifest_No'];
                    $groupedByDockAndManifest[$dock][$manifestNo][] = $item;
                }
            }

            // Hitung jumlah Manifest dan Dock
            $totalManifests = count($filteredData);
            $totalDocks = count($groupedByDock);

            return view('dashboard.index_dashboard', compact('groupedByDockAndManifest', 'totalManifests', 'totalDocks'));
        } catch (RequestException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
