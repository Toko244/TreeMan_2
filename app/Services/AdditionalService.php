<?php

namespace App\Services;

class AdditionalService{
    public function storeLocaleAdditional($request, $values, $section, $postTransFillable)
    {
        foreach(config('app.locales') as $locale) {
            if ($request->has('is_component')) {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable));
            } else {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));

            }
        }

        return $values[$locale]['locale_additional'];
    }

    public function storeAdditional($request, $values, $section, $postFillable)
    {
        if ($request->has('is_component')) {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable));
        } else {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
        }

        return $values['additional'];
    }
}

?>
