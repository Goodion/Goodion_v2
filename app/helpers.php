<?php

if (!function_exists('CityDetermineByIp')) {
    function cityDetermineByIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json", "Authorization: Token " . config('dadata.token')]);
        curl_setopt($ch, CURLOPT_URL, "https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address?ip=" . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        if(curl_exec($ch) === false) {
            $message = 'Ошибка curl: ' . curl_error($ch);
        } else {
            $collection = json_decode(curl_exec($ch));
            if (isset($collection->location->data->city))
            {
                return $collection->location->data->city;
            }
        }

        curl_close($ch);

        return null;
    }
}

if (!function_exists('getBigCities')) {
    function getBigCities() {
        return collect(['Москва', 'Санкт-Петербург', 'Новосибирск', 'Екатеринбург' , 'Нижний Новгород', 'Казань', 'Челябинск',
            'Омск', 'Самара', 'Ростов-на-Дону', 'Уфа', 'Красноярск', 'Воронеж', 'Пермь', 'Волгоград', 'Краснодар', 'Саратов', 'Тюмень', 'Тольятти']);
    }
}

if (!function_exists('normalizePhoneNumber')) {
    function normalizePhoneNumber($phone) {
        $normalizedPhone = preg_replace('#[^0-9]#', '', $phone);

        if (strlen($normalizedPhone) == 10) {
            $normalizedPhone = substr_replace($normalizedPhone, '7', 0, 0);
        }

        if (strlen($normalizedPhone) == 11 && $normalizedPhone[0] == 8) {
            $normalizedPhone = substr_replace($normalizedPhone, '7', 0, 1);
        }

        return $normalizedPhone;
    }
}

if (!function_exists('beautifyPhoneNumber')) {
    function beautifyPhoneNumber($phone) {
        return preg_replace("#(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})#", "+\\1 (\\2) \\3-\\4-\\5", $phone);
    }
}
