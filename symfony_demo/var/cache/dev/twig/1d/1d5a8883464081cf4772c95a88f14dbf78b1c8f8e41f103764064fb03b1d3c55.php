<?php

/* blog/comment_form_error.html.twig */
class __TwigTemplate_7bb8be4d3191c0febbfcdd52f6b76a81b190cc896c5aa2e7baf48ff01b3f877d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/comment_form_error.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4673941fe090fdb740ce55375bbabe8d5176a1f9ff8bffdd698f67133d39ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4673941fe090fdb740ce55375bbabe8d5176a1f9ff8bffdd698f67133d39ba8->enter($__internal_f4673941fe090fdb740ce55375bbabe8d5176a1f9ff8bffdd698f67133d39ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/comment_form_error.html.twig"));

        $__internal_bcdb64d941a5baf465ff385301b766dd2c7e0d06537d8e7d6ae848cae650f7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdb64d941a5baf465ff385301b766dd2c7e0d06537d8e7d6ae848cae650f7e2->enter($__internal_bcdb64d941a5baf465ff385301b766dd2c7e0d06537d8e7d6ae848cae650f7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/comment_form_error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4673941fe090fdb740ce55375bbabe8d5176a1f9ff8bffdd698f67133d39ba8->leave($__internal_f4673941fe090fdb740ce55375bbabe8d5176a1f9ff8bffdd698f67133d39ba8_prof);

        
        $__internal_bcdb64d941a5baf465ff385301b766dd2c7e0d06537d8e7d6ae848cae650f7e2->leave($__internal_bcdb64d941a5baf465ff385301b766dd2c7e0d06537d8e7d6ae848cae650f7e2_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0bef4bd133c67d06e48cfcb3671b53233a47545cee37cefa77c03c3dc3363ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bef4bd133c67d06e48cfcb3671b53233a47545cee37cefa77c03c3dc3363ae5->enter($__internal_0bef4bd133c67d06e48cfcb3671b53233a47545cee37cefa77c03c3dc3363ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_11b52d6a480832dabff8de4a9afe87c7393ac9ec2142b7f09f6e0208c8132494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b52d6a480832dabff8de4a9afe87c7393ac9ec2142b7f09f6e0208c8132494->enter($__internal_11b52d6a480832dabff8de4a9afe87c7393ac9ec2142b7f09f6e0208c8132494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "comment_form_error";
        
        $__internal_11b52d6a480832dabff8de4a9afe87c7393ac9ec2142b7f09f6e0208c8132494->leave($__internal_11b52d6a480832dabff8de4a9afe87c7393ac9ec2142b7f09f6e0208c8132494_prof);

        
        $__internal_0bef4bd133c67d06e48cfcb3671b53233a47545cee37cefa77c03c3dc3363ae5->leave($__internal_0bef4bd133c67d06e48cfcb3671b53233a47545cee37cefa77c03c3dc3363ae5_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_582974d9568e42ff2a6aaf5f8586c4fd50102b0a9264c3643a87a76916281292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582974d9568e42ff2a6aaf5f8586c4fd50102b0a9264c3643a87a76916281292->enter($__internal_582974d9568e42ff2a6aaf5f8586c4fd50102b0a9264c3643a87a76916281292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b5f6a911c9d000470c2c69ba2cd350a430fd7540cbc580c2da746e0062f8918a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f6a911c9d000470c2c69ba2cd350a430fd7540cbc580c2da746e0062f8918a->enter($__internal_b5f6a911c9d000470c2c69ba2cd350a430fd7540cbc580c2da746e0062f8918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.comment_error"), "html", null, true);
        echo "</h1>

    <div class=\"well\">
        ";
        // line 9
        echo twig_include($this->env, $context, "blog/_comment_form.html.twig");
        echo "
    </div>
";
        
        $__internal_b5f6a911c9d000470c2c69ba2cd350a430fd7540cbc580c2da746e0062f8918a->leave($__internal_b5f6a911c9d000470c2c69ba2cd350a430fd7540cbc580c2da746e0062f8918a_prof);

        
        $__internal_582974d9568e42ff2a6aaf5f8586c4fd50102b0a9264c3643a87a76916281292->leave($__internal_582974d9568e42ff2a6aaf5f8586c4fd50102b0a9264c3643a87a76916281292_prof);

    }

    public function getTemplateName()
    {
        return "blog/comment_form_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block body_id 'comment_form_error' %}

{% block main %}
    <h1 class=\"text-danger\">{{ 'title.comment_error'|trans }}</h1>

    <div class=\"well\">
        {{ include('blog/_comment_form.html.twig') }}
    </div>
{% endblock %}
", "blog/comment_form_error.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\comment_form_error.html.twig");
    }
}
