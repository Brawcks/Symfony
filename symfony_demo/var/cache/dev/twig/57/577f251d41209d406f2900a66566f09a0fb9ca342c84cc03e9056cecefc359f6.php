<?php

/* admin/blog/show.html.twig */
class __TwigTemplate_5aaddf5619eee9c5e06112710f3e00541f97c1253c7ba36f41f08528a75a59b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
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
        $__internal_aa980e8698c1e678ac0be7402987a31d384751d14488200c8b7ce81bee7203a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa980e8698c1e678ac0be7402987a31d384751d14488200c8b7ce81bee7203a5->enter($__internal_aa980e8698c1e678ac0be7402987a31d384751d14488200c8b7ce81bee7203a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $__internal_ecc4577c13922df18b9d555dc508f3045a4555e6a7eb1f508f7584a4c63eed99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc4577c13922df18b9d555dc508f3045a4555e6a7eb1f508f7584a4c63eed99->enter($__internal_ecc4577c13922df18b9d555dc508f3045a4555e6a7eb1f508f7584a4c63eed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa980e8698c1e678ac0be7402987a31d384751d14488200c8b7ce81bee7203a5->leave($__internal_aa980e8698c1e678ac0be7402987a31d384751d14488200c8b7ce81bee7203a5_prof);

        
        $__internal_ecc4577c13922df18b9d555dc508f3045a4555e6a7eb1f508f7584a4c63eed99->leave($__internal_ecc4577c13922df18b9d555dc508f3045a4555e6a7eb1f508f7584a4c63eed99_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8f52410a9970597e4a11dab5fbfbf5a77cf6d641c902618f2e97253e8a558591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f52410a9970597e4a11dab5fbfbf5a77cf6d641c902618f2e97253e8a558591->enter($__internal_8f52410a9970597e4a11dab5fbfbf5a77cf6d641c902618f2e97253e8a558591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1e77dcfcc33c02915c754c7bedd003eac9e84a110271ca8d22aec10d8fb088ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e77dcfcc33c02915c754c7bedd003eac9e84a110271ca8d22aec10d8fb088ba->enter($__internal_1e77dcfcc33c02915c754c7bedd003eac9e84a110271ca8d22aec10d8fb088ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_show";
        
        $__internal_1e77dcfcc33c02915c754c7bedd003eac9e84a110271ca8d22aec10d8fb088ba->leave($__internal_1e77dcfcc33c02915c754c7bedd003eac9e84a110271ca8d22aec10d8fb088ba_prof);

        
        $__internal_8f52410a9970597e4a11dab5fbfbf5a77cf6d641c902618f2e97253e8a558591->leave($__internal_8f52410a9970597e4a11dab5fbfbf5a77cf6d641c902618f2e97253e8a558591_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c1d6ced08f63fb72d93161a04a59807a42c07c498560662be796173847bddfbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d6ced08f63fb72d93161a04a59807a42c07c498560662be796173847bddfbf->enter($__internal_c1d6ced08f63fb72d93161a04a59807a42c07c498560662be796173847bddfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c15faec26980c5e626cc9813580c9eed05ae6fb42fe473332ddd673b645f89c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15faec26980c5e626cc9813580c9eed05ae6fb42fe473332ddd673b645f89c7->enter($__internal_c15faec26980c5e626cc9813580c9eed05ae6fb42fe473332ddd673b645f89c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "summary", array()), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "
";
        
        $__internal_c15faec26980c5e626cc9813580c9eed05ae6fb42fe473332ddd673b645f89c7->leave($__internal_c15faec26980c5e626cc9813580c9eed05ae6fb42fe473332ddd673b645f89c7_prof);

        
        $__internal_c1d6ced08f63fb72d93161a04a59807a42c07c498560662be796173847bddfbf->leave($__internal_c1d6ced08f63fb72d93161a04a59807a42c07c498560662be796173847bddfbf_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ec60538005f2206d6a2cc773d0ce264af043aa3d871b50e9df0e26afa0415bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec60538005f2206d6a2cc773d0ce264af043aa3d871b50e9df0e26afa0415bd0->enter($__internal_ec60538005f2206d6a2cc773d0ce264af043aa3d871b50e9df0e26afa0415bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6c9c420c9fff400d3baf2c2638e8bdd2acfc18198cc72d1102fd233298874a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9c420c9fff400d3baf2c2638e8bdd2acfc18198cc72d1102fd233298874a35->enter($__internal_6c9c420c9fff400d3baf2c2638e8bdd2acfc18198cc72d1102fd233298874a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "    <div class=\"section\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 30
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => ($context["post"] ?? $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 33
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 35
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_6c9c420c9fff400d3baf2c2638e8bdd2acfc18198cc72d1102fd233298874a35->leave($__internal_6c9c420c9fff400d3baf2c2638e8bdd2acfc18198cc72d1102fd233298874a35_prof);

        
        $__internal_ec60538005f2206d6a2cc773d0ce264af043aa3d871b50e9df0e26afa0415bd0->leave($__internal_ec60538005f2206d6a2cc773d0ce264af043aa3d871b50e9df0e26afa0415bd0_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  142 => 33,  136 => 30,  128 => 25,  124 => 24,  121 => 23,  112 => 22,  100 => 19,  95 => 17,  87 => 14,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ post.summary }}</p>
    </div>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}
{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_contents'|trans }}
        </a>
    </div>

    <div class=\"section\">
        {{ include('admin/blog/_delete_form.html.twig', {post: post}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/show.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\blog\\show.html.twig");
    }
}
