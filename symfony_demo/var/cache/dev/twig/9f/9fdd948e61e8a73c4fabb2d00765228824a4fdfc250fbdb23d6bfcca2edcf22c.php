<?php

/* blog/index.html.twig */
class __TwigTemplate_15f8f3f32d0a9c4caba9280540d32e49fc1671c5659387f759051a65b2aa4a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_093b085a49d64482fd9765a70c0f751f6175c3ac5fe3f600812b69fc808148ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093b085a49d64482fd9765a70c0f751f6175c3ac5fe3f600812b69fc808148ba->enter($__internal_093b085a49d64482fd9765a70c0f751f6175c3ac5fe3f600812b69fc808148ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_8bae22d56f80fdf35e9f1ef2523801bf50922309195647c735aa59af5de862db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bae22d56f80fdf35e9f1ef2523801bf50922309195647c735aa59af5de862db->enter($__internal_8bae22d56f80fdf35e9f1ef2523801bf50922309195647c735aa59af5de862db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093b085a49d64482fd9765a70c0f751f6175c3ac5fe3f600812b69fc808148ba->leave($__internal_093b085a49d64482fd9765a70c0f751f6175c3ac5fe3f600812b69fc808148ba_prof);

        
        $__internal_8bae22d56f80fdf35e9f1ef2523801bf50922309195647c735aa59af5de862db->leave($__internal_8bae22d56f80fdf35e9f1ef2523801bf50922309195647c735aa59af5de862db_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a4f6b5bd579dce1d50aca5c55f8c2f490374c236f04bcf6038a14a23b77cc93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f6b5bd579dce1d50aca5c55f8c2f490374c236f04bcf6038a14a23b77cc93b->enter($__internal_a4f6b5bd579dce1d50aca5c55f8c2f490374c236f04bcf6038a14a23b77cc93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8b21a027bf70c8840b9ba97c61c6afe5f0f0e21631ac050541c5e914630be0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b21a027bf70c8840b9ba97c61c6afe5f0f0e21631ac050541c5e914630be0bf->enter($__internal_8b21a027bf70c8840b9ba97c61c6afe5f0f0e21631ac050541c5e914630be0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_8b21a027bf70c8840b9ba97c61c6afe5f0f0e21631ac050541c5e914630be0bf->leave($__internal_8b21a027bf70c8840b9ba97c61c6afe5f0f0e21631ac050541c5e914630be0bf_prof);

        
        $__internal_a4f6b5bd579dce1d50aca5c55f8c2f490374c236f04bcf6038a14a23b77cc93b->leave($__internal_a4f6b5bd579dce1d50aca5c55f8c2f490374c236f04bcf6038a14a23b77cc93b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c56a183b0646739d26fc796915761f788532478276711a06079bd31e045045c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56a183b0646739d26fc796915761f788532478276711a06079bd31e045045c7->enter($__internal_c56a183b0646739d26fc796915761f788532478276711a06079bd31e045045c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e0c9b7bfd2678f827af768d369f992ac217e6736aa44ef834c422203ea666f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c9b7bfd2678f827af768d369f992ac217e6736aa44ef834c422203ea666f74->enter($__internal_e0c9b7bfd2678f827af768d369f992ac217e6736aa44ef834c422203ea666f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "fullName", array()), "html", null, true);
            echo "</span>
            </p>

            ";
            // line 19
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute(($context["posts"] ?? $this->getContext($context, "posts")), "haveToPaginate", array())) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            ";
            // line 29
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta(($context["posts"] ?? $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
            echo "
        </div>
    ";
        }
        
        $__internal_e0c9b7bfd2678f827af768d369f992ac217e6736aa44ef834c422203ea666f74->leave($__internal_e0c9b7bfd2678f827af768d369f992ac217e6736aa44ef834c422203ea666f74_prof);

        
        $__internal_c56a183b0646739d26fc796915761f788532478276711a06079bd31e045045c7->leave($__internal_c56a183b0646739d26fc796915761f788532478276711a06079bd31e045045c7_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_22fcb3c006b43437dc9f5d62d2592108078b532e89c31468fe0ee49bc7f4f0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fcb3c006b43437dc9f5d62d2592108078b532e89c31468fe0ee49bc7f4f0c3->enter($__internal_22fcb3c006b43437dc9f5d62d2592108078b532e89c31468fe0ee49bc7f4f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_9e4bb32f7e2c459caef91b164fbb9d4058a8a6ce513352853ec9161f9c332f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4bb32f7e2c459caef91b164fbb9d4058a8a6ce513352853ec9161f9c332f83->enter($__internal_9e4bb32f7e2c459caef91b164fbb9d4058a8a6ce513352853ec9161f9c332f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_9e4bb32f7e2c459caef91b164fbb9d4058a8a6ce513352853ec9161f9c332f83->leave($__internal_9e4bb32f7e2c459caef91b164fbb9d4058a8a6ce513352853ec9161f9c332f83_prof);

        
        $__internal_22fcb3c006b43437dc9f5d62d2592108078b532e89c31468fe0ee49bc7f4f0c3->leave($__internal_22fcb3c006b43437dc9f5d62d2592108078b532e89c31468fe0ee49bc7f4f0c3_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 38,  181 => 37,  175 => 35,  166 => 34,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  135 => 24,  119 => 21,  114 => 19,  108 => 16,  104 => 15,  96 => 10,  92 => 9,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', {slug: post.slug}) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
            </p>

            {{ post.summary|md2html }}

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if posts.haveToPaginate %}
        <div class=\"navigation text-center\">
            {{ pagerfanta(posts, 'twitter_bootstrap3_translated', {routeName: 'blog_index_paginated'}) }}
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\index.html.twig");
    }
}
