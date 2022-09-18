<?php

namespace App\Repository;

interface ProductRepository
{
    function product();
    function create($data);
    function find($id);
    function update($data, $id);
    function delete($id);
}
