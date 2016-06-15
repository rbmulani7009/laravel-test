<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Orchestra\Parser\Xml\Reader as XmlReader;
use Orchestra\Parser\Xml\Document as XmlDocument;

class ProductController extends Controller {

    public function __construct() {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $xml = XmlParser::load('path/to/above.xml');
        $user = $xml->parse([
            'id' => ['uses' => 'user.id'],
            'email' => ['uses' => 'user.email'],
            'followers' => ['uses' => 'user::followers'],
        ]);
        return view('product.index');
    }

}
