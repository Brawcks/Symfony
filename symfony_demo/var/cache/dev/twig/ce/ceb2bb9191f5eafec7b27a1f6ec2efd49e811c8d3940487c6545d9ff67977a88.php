<?php

/* blog/_delete_post_confirmation.html.twig */
class __TwigTemplate_297bea42fea55d35e803d80a8d12c0a74b9ba9a69e72979d81c8c52bfe806b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0de42e39b720cb0b764124a45a661df1d5265b4f3431f39a163b0e48cb57c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0de42e39b720cb0b764124a45a661df1d5265b4f3431f39a163b0e48cb57c2->enter($__internal_6d0de42e39b720cb0b764124a45a661df1d5265b4f3431f39a163b0e48cb57c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        $__internal_08605d5ec01f97274ca1e833d94f116d4970113588c40baafac2facfbc93f1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08605d5ec01f97274ca1e833d94f116d4970113588c40baafac2facfbc93f1e8->enter($__internal_08605d5ec01f97274ca1e833d94f116d4970113588c40baafac2facfbc93f1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.body"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.delete_post"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6d0de42e39b720cb0b764124a45a661df1d5265b4f3431f39a163b0e48cb57c2->leave($__internal_6d0de42e39b720cb0b764124a45a661df1d5265b4f3431f39a163b0e48cb57c2_prof);

        
        $__internal_08605d5ec01f97274ca1e833d94f116d4970113588c40baafac2facfbc93f1e8->leave($__internal_08605d5ec01f97274ca1e833d94f116d4970113588c40baafac2facfbc93f1e8_prof);

    }

    public function getTemplateName()
    {
        return "blog/_delete_post_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 11,  35 => 7,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Bootstrap modal, see http://getbootstrap.com/javascript/#modals #}
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_post_modal.title'|trans }}</h4>
                <p>{{ 'delete_post_modal.body'|trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    {{ 'label.cancel'|trans }}
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    {{ 'label.delete_post'|trans }}
                </button>
            </div>
        </div>
    </div>
</div>
", "blog/_delete_post_confirmation.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\_delete_post_confirmation.html.twig");
    }
}
