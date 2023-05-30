<?php

namespace App\Controllers;

use App\Core\Controller;

class Kategori extends Controller
{

	public function index()
	{
		$this->home('kategori/index');
	}

    public function input()
	{
		$this->home('kategori/input');
	}

    public function simpan()
	{

	}

    public function update()
	{
		$this->home('kategori/update');
	}

    public function deleted()
	{
		$this->home('kategori/deleted');
	}
}