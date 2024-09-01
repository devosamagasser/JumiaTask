<?php
namespace App\Traits;
trait CustomersTrait

{

    /**
     * @param \Illuminate\Database\Eloquent\Collection $customers
     * @param $code
     * @return \Illuminate\Support\Collection
     */
    public function filterWithCode(\Illuminate\Database\Eloquent\Collection $customers)
    {
        return $customers->filter(function ($item) {
            if($item['code'] == request('code')){
                return $item;
            }
        })->values();
    }

    public function filterWithState(\Illuminate\Database\Eloquent\Collection $customers)
    {
        return $customers->filter(function ($item){
            if($item['valid'] == request('state')){
                return $item;
            }
        })->values();
    }

    public function filterWithCodeAndState(\Illuminate\Database\Eloquent\Collection $customers)
    {
//        dd($item['valid'] == request('state'));
        return $customers->filter(function ($item) {
            if($item['valid'] == request('state') && $item['code'] == request('code')){
                return $item;
            }
        })->values();
    }
}
