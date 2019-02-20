<?php
class Html {
    public static function dropdown($name, $sql, $clabel, $cval, $selected='') {
        $str = "<select name='$name'>";
        $str .= "<option value='0'>-Sila Pilih-</option>";
        $rows = Model::select_all($sql);
        foreach($rows as $row) {
            $val = $row[$cval];
            
            if(is_array($clabel)) {
                $label = '';
                $i = 1;
                foreach ($clabel as $clabel2) {
                    if ($i++ !== 1) {
                        $label .= '-';
                    }
                    $label .= $row[$clabel2];
                }
            } else {
                $label = $row[$clabel];
            }
            
            $s = '';
            if ($selected === $val)
                $s = 'selected';
            
            if($combine)
                $str .= "<option value='$val' $s>$val $label</option>";
            else
                $str .= "<option value='$val' $s>$label</option>";
        }
        $str .= "</select>";
        return $str;
    }
}
