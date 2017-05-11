<?php

/* blog/about.html.twig */
class __TwigTemplate_078fa82315c296fb2f2aa0ea88aa4c30b2925040cd6c8ab59ec75320a809bb4a extends Twig_Template
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
        $__internal_4c5ef3e30989cd802f1d01ed0cdaa0ceae1ecfc144bf5cc9ae56d2d927d809fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ef3e30989cd802f1d01ed0cdaa0ceae1ecfc144bf5cc9ae56d2d927d809fb->enter($__internal_4c5ef3e30989cd802f1d01ed0cdaa0ceae1ecfc144bf5cc9ae56d2d927d809fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_cd4a8322c0d0501f94643cd3226dde342721ce22b5fe82be6093f21d4469dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a8322c0d0501f94643cd3226dde342721ce22b5fe82be6093f21d4469dc39->enter($__internal_cd4a8322c0d0501f94643cd3226dde342721ce22b5fe82be6093f21d4469dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_4c5ef3e30989cd802f1d01ed0cdaa0ceae1ecfc144bf5cc9ae56d2d927d809fb->leave($__internal_4c5ef3e30989cd802f1d01ed0cdaa0ceae1ecfc144bf5cc9ae56d2d927d809fb_prof);

        
        $__internal_cd4a8322c0d0501f94643cd3226dde342721ce22b5fe82be6093f21d4469dc39->leave($__internal_cd4a8322c0d0501f94643cd3226dde342721ce22b5fe82be6093f21d4469dc39_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\about.html.twig");
    }
}
