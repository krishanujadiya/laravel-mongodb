<?php

namespace App\Models\Traits;
use App\Models\Faq;

/**
 * Class Faqs.
 */
trait Faqs
{

    public function faqs($slug)
    {
        return Faq::where('slug', $slug)->select()->get();
    }
}
