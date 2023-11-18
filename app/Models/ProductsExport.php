<?php

namespace App\Models;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Product::all();
    }

    public function headings(): array
    {
        return [
            'name',
            'item_code',
            'barcode_symbology',
            'description',
            'unit',
            'category',
            'brand',
            'tax',
            'mrp',
            'purchase_price',
            'sales_price',
            'purchase_tax_type',
            'sales_tax_type',
            'stock_quantitiy_alert',
            'opening_stock',
            'opening_stock_date',
            'wholesale_price',
            'wholesale_quantity',
            'warehouse',
        ];
    }

    /**
    * @var Product $product
    */
    public function map($product): array
    {
        return [
            $product->name,
            $product->id,
            'CODE128',
            $product->description,
            'piece',
            $product->category->name ?? 'Default',
            $product->brand->name ?? 'Default',
            '',
            $product->unit_price,
            $product->unit_price,
            $product->unit_price,
            'exclusive',
            'exclusive',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            'Cosmetifly',
        ];
    }
}
