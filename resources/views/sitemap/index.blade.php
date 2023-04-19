<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach($metas as $value)
    <url>
      <loc>{{ $value->name_page }}</loc>
      <lastmod>{{ $value->updated_at->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>hourly</changefreq>
      <priority>{{blank($value->priority)?'0.8':$value->priority}}</priority>
    </url>
  @endforeach
</urlset>
