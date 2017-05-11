<?php

/* form/fields.html.twig */
class __TwigTemplate_2b35eba18e8c60599b056fa2ae72268700a36491085676b9b4ca0a4cb426648c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'tags_input_widget' => array($this, 'block_tags_input_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eddefd1b9d2d68a1d33bed2cd19999c2ea9c9d9be361bdcb13ae23e5b77a6a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddefd1b9d2d68a1d33bed2cd19999c2ea9c9d9be361bdcb13ae23e5b77a6a29->enter($__internal_eddefd1b9d2d68a1d33bed2cd19999c2ea9c9d9be361bdcb13ae23e5b77a6a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_a613c4a3a131dbad8f343f417e508fc8a35fdbb1d48dcbe46ece2f9098501c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a613c4a3a131dbad8f343f417e508fc8a35fdbb1d48dcbe46ece2f9098501c5a->enter($__internal_a613c4a3a131dbad8f343f417e508fc8a35fdbb1d48dcbe46ece2f9098501c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('tags_input_widget', $context, $blocks);
        
        $__internal_eddefd1b9d2d68a1d33bed2cd19999c2ea9c9d9be361bdcb13ae23e5b77a6a29->leave($__internal_eddefd1b9d2d68a1d33bed2cd19999c2ea9c9d9be361bdcb13ae23e5b77a6a29_prof);

        
        $__internal_a613c4a3a131dbad8f343f417e508fc8a35fdbb1d48dcbe46ece2f9098501c5a->leave($__internal_a613c4a3a131dbad8f343f417e508fc8a35fdbb1d48dcbe46ece2f9098501c5a_prof);

    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_6686e871dff93dc40ed18c19319f8515074f0c5b54d1390b09e8151149e18be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6686e871dff93dc40ed18c19319f8515074f0c5b54d1390b09e8151149e18be3->enter($__internal_6686e871dff93dc40ed18c19319f8515074f0c5b54d1390b09e8151149e18be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_05def59a13f6592d1680dd53f512e8cef42283e0cfbad3cd4a801502028056e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05def59a13f6592d1680dd53f512e8cef42283e0cfbad3cd4a801502028056e4->enter($__internal_05def59a13f6592d1680dd53f512e8cef42283e0cfbad3cd4a801502028056e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        ";
        // line 12
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_05def59a13f6592d1680dd53f512e8cef42283e0cfbad3cd4a801502028056e4->leave($__internal_05def59a13f6592d1680dd53f512e8cef42283e0cfbad3cd4a801502028056e4_prof);

        
        $__internal_6686e871dff93dc40ed18c19319f8515074f0c5b54d1390b09e8151149e18be3->leave($__internal_6686e871dff93dc40ed18c19319f8515074f0c5b54d1390b09e8151149e18be3_prof);

    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = array())
    {
        $__internal_f5f5dee7e497612adcc9325253bb2368fc4decd8919060b280d88f53ee6b09e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f5dee7e497612adcc9325253bb2368fc4decd8919060b280d88f53ee6b09e2->enter($__internal_f5f5dee7e497612adcc9325253bb2368fc4decd8919060b280d88f53ee6b09e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_b647cd99becc5a6a8eab73e44cfad762520869aef28168720e10a49fd92f69f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b647cd99becc5a6a8eab73e44cfad762520869aef28168720e10a49fd92f69f1->enter($__internal_b647cd99becc5a6a8eab73e44cfad762520869aef28168720e10a49fd92f69f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 20
        echo "    <div class=\"input-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("data-toggle" => "tagsinput", "data-tags" => twig_jsonencode_filter(($context["tags"] ?? $this->getContext($context, "tags"))))));
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_b647cd99becc5a6a8eab73e44cfad762520869aef28168720e10a49fd92f69f1->leave($__internal_b647cd99becc5a6a8eab73e44cfad762520869aef28168720e10a49fd92f69f1_prof);

        
        $__internal_f5f5dee7e497612adcc9325253bb2368fc4decd8919060b280d88f53ee6b09e2->leave($__internal_f5f5dee7e497612adcc9325253bb2368fc4decd8919060b280d88f53ee6b09e2_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  73 => 19,  57 => 12,  54 => 11,  45 => 10,  35 => 19,  32 => 18,  30 => 10,  27 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See https://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        {{ block('datetime_widget') }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {'attr': {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}
", "form/fields.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
