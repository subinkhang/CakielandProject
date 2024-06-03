<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportBillData implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return ["ID", "User ID", "Full Name", "Email", "Phone Number", "Address", "Order Date", "Status", "Total Money"];
    }

    public function collection()
    {
        // Lấy dữ liệu từ bảng bills và chỉ chọn các trường cần thiết
        return Order::select('id', 'user_id', 'fullname', 'email', 'phone_number', 'address', 'order_date', 'status', 'total_money')->get();
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
        $sheet->getStyle('A1:I1')->applyFromArray([
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
        $sheet->getStyle('A1:I1000')->getAlignment()->setWrapText(true);

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
            'C' => 20,
            'D' => 25,
            'E' => 15,
            'F' => 30,
            'G' => 20,
            'H' => 10,
            'I' => 15,
        ];
    }
}
