<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                    [
                        'id' => 1,
                        'title' => 'Listing One',
                        'description' => 'Bij deze gbaan gaat u leuke dingen leren, we verwachte dat u uw eigen kleding, messen etc bij u heeft.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Listing Two',
                        'description' => 'Bij deze gbaan gaat u leuke dingen leren, we verwachte dat u uw eigen kleding, messen etc bij u heeft.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Listing Three',
                        'description' => 'Bij deze gbaan gaat u leuke dingen leren, we verwachte dat u uw eigen kleding, messen etc bij u heeft.'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Listing Four',
                        'description' => 'Bij deze gbaan gaat u leuke dingen leren, we verwachte dat u uw eigen kleding, messen etc bij u heeft.'
                    ],
                ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }