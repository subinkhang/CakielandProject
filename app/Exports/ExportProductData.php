<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportProductData implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return ["ID", "Category ID", "Sub Category ID", "Name", "Price", "Description", "Description Detail", "Description Technique"];
    }

    public function collection()
    {
        // Lấy dữ liệu từ bảng products và chỉ chọn các trường cần thiết
        return Product::select('id', 'category_id', 'sub_category_id', 'name', 'price', 'description', 'description_detail', 'description_technique')->get();
    }

    /**
    * Apply styles to the spreadsheet
    *
    * @param Worksheet $sheet
    * @return array
    */
    public function styles(Worksheet $sheet)
    {
        // Thiết lập chiều cao dòng mặc định
        $sheet->getDefaultRowDimension()->setRowHeight(20);

        // Thiết lập kiểu cho dòng đầu tiên (heading)
        $sheet->getStyle('A1:H1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 14,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['argb' => 'FFFF00'], // Màu nền vàng
            ],
        ]);

        // Thiết lập kiểu cho toàn bộ sheet để cho phép xuống dòng
        $sheet->getStyle('A1:H1000')->getAlignment()->setWrapText(true);

        return [];
    }

    /**
    * Set fixed column widths
    *
    * @return array
    */
    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 15,
            'C' => 15,
            'D' => 20,
            'E' => 15,
            'F' => 30,
            'G' => 30,
            'H' => 30,
        ];
    }
}
