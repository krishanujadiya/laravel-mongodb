<!-- Footer Starts -->
<div class="container">
  <p>&copy; 2020 by Custom. All Rights Reserved.</p>

  <ul class="list-inline">
    <li class="list-inline-item">
      <a href="/" rel="nofollow"><i class="fas fa-home mr-3 text-white"></i></a>
    </li>
    <li class="list-inline-item">
      <a href="#" rel="nofollow"><i class="fab fa-facebook-f mr-3 text-white"></i></a>
    </li>
    <li class="list-inline-item">
      <a href="#" rel="nofollow"><i class="fab fa-twitter mr-3 text-white"></i></a>
    </li>
    <li class="list-inline-item">
      <a href="#" rel="nofollow"><i class="fab fa-youtube mr-3 text-white"></i></a>
    </li>
  </ul>

  <ul class="list-inline">
    <li class="list-inline-item">
      <a href="/about-us">About Us</a>
    </li>
    <li class="list-inline-item">
      <a href="/privacy-policy">Privacy Policy</a>
    </li>
    <li class="list-inline-item">
      <a href="/disclaimer">Disclaimer</a>
    </li>
    <li class="list-inline-item">
      <a href="/contact-us">Contact Us</a>
    </li>
  </ul>
</div>

@if(isset($faqs) && count($faqs)>0)
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      @foreach($faqs as $key => $faq) {
        "@type": "Question",
        "name": "{{$faq->question}}",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "{{$faq->answer}}"
        }
        @if((count($faqs) - 1) > ($key + 1) || (count($faqs) - 1) == ($key + 1))
      },
      @else
    }
    @endif
    @endforeach
  ]
  }
</script>
@endif


<!-- Footer Ends -->