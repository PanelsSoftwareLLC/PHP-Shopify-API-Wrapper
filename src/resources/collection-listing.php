<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getCollects() method
         *
         *    reference: https://help.shopify.com/api/reference/collectionlisting
         */
        "getCollectionProductIds" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collection_listings/{id}/product_ids.json",
            "summary" => "Retrieve a list of all product ids of a collection",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the collection.",
                    "required" => true
                )
            )
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);
