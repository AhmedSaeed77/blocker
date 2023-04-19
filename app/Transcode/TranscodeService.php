<?php


namespace App\Transcode;


use App\Models\Transcode;
use App\Localization\Locale;

class TranscodeService
{

    // public function update($row, $values_arr)
    // {
    //     $table = $row->table;
    //     $columns = $row->transcodeColumns;
    //     $row_id = $row->id;

    //     foreach ($columns as $col) {
    //         $tc = Transcode::where('table_', $table)->where('row_', $row_id)->where('column_', $col)->first();
    //         if ($tc) {
    //             if ($values_arr[$col]) {
    //                 $tc->transcode = $values_arr[$col];
    //                 $tc->save();
    //             }
    //         } else {
    //             if ($values_arr[$col]) {
    //                 $tc = new \App\Transcode;
    //                 $tc->table_ = $table;
    //                 $tc->column_ = $col;
    //                 $tc->row_ = $row_id;
    //                 $tc->transcode = $values_arr[$col];
    //                 $tc->save();
    //             }
    //         }
    //     }
    // }

    // public function evaluate($row, $forceToGetArabic = 0)
    // {

    //     $locale = new Locale;


    //     try {
    //         $table = $row->table;
    //         $columns = $row->transcodeColumns;
    //         $row_id = $row->id;
    //     } catch (\Exception $e) {
    //         dd($e);
    //         dd('Transcode Error');
    //     }

    //     $obj = array_combine($columns, array_fill(0, count($columns), null));


    //     $transCodes = \App\Transcode::where('table_', $table)->where('row_', $row_id)->get();
    //     if (!$forceToGetArabic) {
    //         if ($locale->locale == 'en') {

    //             foreach ($columns as $col) {
    //                 if (!$row[$col]) {
    //                     $t = $transCodes->first(function ($i) use ($col) {
    //                         return $i->column_ == $col;
    //                     });

    //                     if ($t) {
    //                         $obj[$col] = $t->transcode;
    //                     } else {
    //                         $obj[$col] = '';
    //                     }
    //                 } else {
    //                     $obj[$col] = $row[$col];
    //                 }
    //             }
    //             return $obj;
    //         } else if ($locale->locale == 'ar') {

    //             foreach ($columns as $col) {

    //                 $t = $transCodes->first(function ($i) use ($col) {
    //                     return $i->column_ == $col;
    //                 });
    //                 if ($t) {
    //                     $obj[$col] = $t->transcode;
    //                 } else {
    //                     $obj[$col] = $row[$col];
    //                 }
    //             }

    //             return $obj;
    //         }
    //     } else {


    //         foreach ($columns as $col) {

    //             $t = $transCodes->first(function ($i) use ($col) {
    //                 return $i->column_ == $col;
    //             });
    //             if ($t) {
    //                 $obj[$col] = $t->transcode;
    //             } else {
    //                 $obj[$col] = '';
    //             }
    //         }

    //         return $obj;
    //     }


    //     return [];
    // }

    public function add($row, $values_arr, $lang)
    {
        $table = $row->table;
        $columns = $row->transcodeColumns;
        $row_id = $row->id;
        foreach ($columns as $col) {
            if ($values_arr[$col] != '') {
                $tc = new Transcode;
                $tc->table_ = $table;
                $tc->lang_ = $lang;
                $tc->column_ = $col;
                $tc->row_ = $row_id;
                $tc->transcode = $values_arr[$col];
                $tc->save();
            }
        }
    }

    public function delete($row)
    {
        $table = $row->table;
        $columns = $row->transcodeColumns;
        $row_id = $row->id;

        $rans = \App\Transcode::where('table_', $table)->where('row_', $row_id)->get();

        foreach ($rans as $r) {
            $r->delete();
        }
    }
}
