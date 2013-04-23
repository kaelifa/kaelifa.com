---
layout: default
title: "Blog"
description: ""
---

# {{ page.title }}

## Latest posts

<ul class="entries">
  {% for post in site.posts %}

  <li>
    <a href="{{ post.url }}">
      <!-- <img src="{{ post.image }}" /> -->
      <h3>{{ post.title }}</h3>
    </a>
  </li>

  {% endfor %}
</ul>
