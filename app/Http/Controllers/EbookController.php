<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
	public function showEbooks()
	{
		return view('/ebooks/show');
	}

	public function storeEbook(Request $request)
	{
		$ebooks = Ebook::create([
			'title' => $request->title,
			'description' => $request->description,
			'amount' => $request->amount
		]);

		if ($ebooks) {
			return redirect('/ebooks', 302);
		}
	}

	public function updateEbook()
	{
		// Implement update
		return view('/ebooks/show');
	}
}
