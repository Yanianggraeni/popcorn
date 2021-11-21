<?php

namespace App\Controllers;

use App\Models\MovieModel;

class Pages extends BaseController
{
    protected $movieModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function ....()
    {
        $nowPlaying = $this->movieModel->where('status' , 'now Playing')->findAll();
        $upComing = $this->movieModel->where('status' , 'up Coming')->findAll();;
        $data = [
            'now Playing' => $nowPlaying,
            'up Coming' => $upComing
        ];
        echo view('pages/home', $data);
    }

    public function movie($id_movie)
    {
        $movie = $this->movieModel->where(id_movie , $id_movie)->findAll();
        $data = [
            'movie' => $movie
        ];
        echo view('pages/movie', $data);
    }
}
