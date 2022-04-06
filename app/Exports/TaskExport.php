<?php

namespace App\Exports;

use App\Models\task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;

class TaskExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return task::select('id','title','pic','start','end','description','status')->get();
    }

    public function headings(): array
    {
        return ["No", "Project Name", "PIC" ,"Start Project","Deadline Project", "Description","Status"];
    }

}
