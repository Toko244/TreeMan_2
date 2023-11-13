<?php

namespace App\Services;

class OldFilesService{
    public function deleteOldFiles($allOldFiles, $values)
    {
        foreach ($allOldFiles as $key => $fil) {
            if (isset($values['old_file']) && count($values['old_file']) > 0) {
                if (!in_array($fil->id, array_keys($values['old_file']))) {
                    $fil->delete();
                }
            } else {
                $fil->delete();
            }
        }
    }
}

?>
