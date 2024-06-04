<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportUsersData implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return ["Name", "Email", "Phone", "Address", "Role", "Birthday", "Create at", "Avatar"];
    }

    public function collection()
    {
        // Lấy dữ liệu và chỉ chọn các trường cần thiết
        return User::select('name', 'email', 'phone_number', 'address', 'role', 'date_of_birth', 'created_at')->get();
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
        return [
            1    => [
                'font' => [
                    'bold' => true,
                    'size' => 14,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => 'FFFF00'], // Màu nền vàng
                ],
            ],
        ];
    }
}
