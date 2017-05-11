<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_7a2422b4f79e091275d4e09640af413a1d42c35d073cf881d2c2b6e94c8bc782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c66ee4a30a41d19564a6318fa6db655d2d9771f940c52c06bd9256d8ab6b3bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66ee4a30a41d19564a6318fa6db655d2d9771f940c52c06bd9256d8ab6b3bc1->enter($__internal_c66ee4a30a41d19564a6318fa6db655d2d9771f940c52c06bd9256d8ab6b3bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $__internal_394865eb11b2c4b9a7162671cfe02266baad90bf15537d0f6cde84231bd01532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394865eb11b2c4b9a7162671cfe02266baad90bf15537d0f6cde84231bd01532->enter($__internal_394865eb11b2c4b9a7162671cfe02266baad90bf15537d0f6cde84231bd01532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c66ee4a30a41d19564a6318fa6db655d2d9771f940c52c06bd9256d8ab6b3bc1->leave($__internal_c66ee4a30a41d19564a6318fa6db655d2d9771f940c52c06bd9256d8ab6b3bc1_prof);

        
        $__internal_394865eb11b2c4b9a7162671cfe02266baad90bf15537d0f6cde84231bd01532->leave($__internal_394865eb11b2c4b9a7162671cfe02266baad90bf15537d0f6cde84231bd01532_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a2d87e4b31fa2fa902fa3f0ee647c99e693ac9f9accee06e656d843ef58a1ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d87e4b31fa2fa902fa3f0ee647c99e693ac9f9accee06e656d843ef58a1ca3->enter($__internal_a2d87e4b31fa2fa902fa3f0ee647c99e693ac9f9accee06e656d843ef58a1ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_17742d8e78fd7d26a19f40996693c8d0c37642f1eafccda097dec1cdf8e19f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17742d8e78fd7d26a19f40996693c8d0c37642f1eafccda097dec1cdf8e19f21->enter($__internal_17742d8e78fd7d26a19f40996693c8d0c37642f1eafccda097dec1cdf8e19f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_17742d8e78fd7d26a19f40996693c8d0c37642f1eafccda097dec1cdf8e19f21->leave($__internal_17742d8e78fd7d26a19f40996693c8d0c37642f1eafccda097dec1cdf8e19f21_prof);

        
        $__internal_a2d87e4b31fa2fa902fa3f0ee647c99e693ac9f9accee06e656d843ef58a1ca3->leave($__internal_a2d87e4b31fa2fa902fa3f0ee647c99e693ac9f9accee06e656d843ef58a1ca3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_5c69075cb0bf8e113dcb35ef594bd462f5a941b1118c335abcf533d9e8bbb9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c69075cb0bf8e113dcb35ef594bd462f5a941b1118c335abcf533d9e8bbb9b8->enter($__internal_5c69075cb0bf8e113dcb35ef594bd462f5a941b1118c335abcf533d9e8bbb9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e1975e721f450876e6ff81b558566579a08187a8fb9723f5d1912a3a9d1adf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1975e721f450876e6ff81b558566579a08187a8fb9723f5d1912a3a9d1adf66->enter($__internal_e1975e721f450876e6ff81b558566579a08187a8fb9723f5d1912a3a9d1adf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_post", array("%id%" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 9
($context["form"] ?? $this->getContext($context, "form")), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 12
        echo "
";
        
        $__internal_e1975e721f450876e6ff81b558566579a08187a8fb9723f5d1912a3a9d1adf66->leave($__internal_e1975e721f450876e6ff81b558566579a08187a8fb9723f5d1912a3a9d1adf66_prof);

        
        $__internal_5c69075cb0bf8e113dcb35ef594bd462f5a941b1118c335abcf533d9e8bbb9b8->leave($__internal_5c69075cb0bf8e113dcb35ef594bd462f5a941b1118c335abcf533d9e8bbb9b8_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e36c0a48d22943a8ff9ab28b11e9fc4e9f56323ed3d5d9d8e93c4f09f191608d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36c0a48d22943a8ff9ab28b11e9fc4e9f56323ed3d5d9d8e93c4f09f191608d->enter($__internal_e36c0a48d22943a8ff9ab28b11e9fc4e9f56323ed3d5d9d8e93c4f09f191608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4fcde50e175ee855e9cfd95e1d7f2bcb90e2255454d52050e4d0e1b9ae0f095c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcde50e175ee855e9cfd95e1d7f2bcb90e2255454d52050e4d0e1b9ae0f095c->enter($__internal_4fcde50e175ee855e9cfd95e1d7f2bcb90e2255454d52050e4d0e1b9ae0f095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "    <div class=\"section\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show_post"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section actions\">
        ";
        // line 23
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => ($context["post"] ?? $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 26
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_4fcde50e175ee855e9cfd95e1d7f2bcb90e2255454d52050e4d0e1b9ae0f095c->leave($__internal_4fcde50e175ee855e9cfd95e1d7f2bcb90e2255454d52050e4d0e1b9ae0f095c_prof);

        
        $__internal_e36c0a48d22943a8ff9ab28b11e9fc4e9f56323ed3d5d9d8e93c4f09f191608d->leave($__internal_e36c0a48d22943a8ff9ab28b11e9fc4e9f56323ed3d5d9d8e93c4f09f191608d_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  119 => 26,  113 => 23,  105 => 18,  101 => 17,  98 => 16,  89 => 15,  78 => 12,  76 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_edit' %}

{% block main %}
    <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>

    {{ include('admin/blog/_form.html.twig', {
        form: form,
        button_label: 'action.save'|trans,
        include_back_to_home_link: true,
    }, with_context = false) }}
{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show_post'|trans }}
        </a>
    </div>

    <div class=\"section actions\">
        {{ include('admin/blog/_delete_form.html.twig', {post: post}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/edit.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\blog\\edit.html.twig");
    }
}
