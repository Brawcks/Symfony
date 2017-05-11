<?php

/* base.html.twig */
class __TwigTemplate_908b1f1a96ad7df374e672414e3568d6da15c4440add1ae16d445deed9c710a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5338ed4dec45c466cd0d5ca1934c6bd6407a4c55630ba458ee9c60721e340384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5338ed4dec45c466cd0d5ca1934c6bd6407a4c55630ba458ee9c60721e340384->enter($__internal_5338ed4dec45c466cd0d5ca1934c6bd6407a4c55630ba458ee9c60721e340384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f275da473c3270fc226bfbb61afa8f0bc2af9a9d54850cc4eab5e38948c05a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f275da473c3270fc226bfbb61afa8f0bc2af9a9d54850cc4eab5e38948c05a79->enter($__internal_f275da473c3270fc226bfbb61afa8f0bc2af9a9d54850cc4eab5e38948c05a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 25
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 90
        echo "
        <div class=\"container body-container\">
            ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        </div>

        ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "
        ";
        // line 152
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_5338ed4dec45c466cd0d5ca1934c6bd6407a4c55630ba458ee9c60721e340384->leave($__internal_5338ed4dec45c466cd0d5ca1934c6bd6407a4c55630ba458ee9c60721e340384_prof);

        
        $__internal_f275da473c3270fc226bfbb61afa8f0bc2af9a9d54850cc4eab5e38948c05a79->leave($__internal_f275da473c3270fc226bfbb61afa8f0bc2af9a9d54850cc4eab5e38948c05a79_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_51e59297449cb270dbb668f9da739269b4ad3c91364b4c487b0147142a21a993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e59297449cb270dbb668f9da739269b4ad3c91364b4c487b0147142a21a993->enter($__internal_51e59297449cb270dbb668f9da739269b4ad3c91364b4c487b0147142a21a993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5337447dc923bfc2b7137da13cdaad1f539f84b7d39f1f852917784e6fdc022b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5337447dc923bfc2b7137da13cdaad1f539f84b7d39f1f852917784e6fdc022b->enter($__internal_5337447dc923bfc2b7137da13cdaad1f539f84b7d39f1f852917784e6fdc022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_5337447dc923bfc2b7137da13cdaad1f539f84b7d39f1f852917784e6fdc022b->leave($__internal_5337447dc923bfc2b7137da13cdaad1f539f84b7d39f1f852917784e6fdc022b_prof);

        
        $__internal_51e59297449cb270dbb668f9da739269b4ad3c91364b4c487b0147142a21a993->leave($__internal_51e59297449cb270dbb668f9da739269b4ad3c91364b4c487b0147142a21a993_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74e1aefde34d7e63a3ec8f66fb3201a57270f24501bc13abc4f552b8cb2a3199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e1aefde34d7e63a3ec8f66fb3201a57270f24501bc13abc4f552b8cb2a3199->enter($__internal_74e1aefde34d7e63a3ec8f66fb3201a57270f24501bc13abc4f552b8cb2a3199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_387398071e19be108d9f60dd68b83e4441ea5dae1669c8f82407917d5fdc3f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387398071e19be108d9f60dd68b83e4441ea5dae1669c8f82407917d5fdc3f28->enter($__internal_387398071e19be108d9f60dd68b83e4441ea5dae1669c8f82407917d5fdc3f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-tagsinput.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_387398071e19be108d9f60dd68b83e4441ea5dae1669c8f82407917d5fdc3f28->leave($__internal_387398071e19be108d9f60dd68b83e4441ea5dae1669c8f82407917d5fdc3f28_prof);

        
        $__internal_74e1aefde34d7e63a3ec8f66fb3201a57270f24501bc13abc4f552b8cb2a3199->leave($__internal_74e1aefde34d7e63a3ec8f66fb3201a57270f24501bc13abc4f552b8cb2a3199_prof);

    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b0a736c6444130e62f3d20135a8804cec0db7e2cbe4bc61b401ac94e424157cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a736c6444130e62f3d20135a8804cec0db7e2cbe4bc61b401ac94e424157cc->enter($__internal_b0a736c6444130e62f3d20135a8804cec0db7e2cbe4bc61b401ac94e424157cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a5df926995f8b1dbe258ca57432a6fe31e6a3430fef4781739d65917cb95d133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5df926995f8b1dbe258ca57432a6fe31e6a3430fef4781739d65917cb95d133->enter($__internal_a5df926995f8b1dbe258ca57432a6fe31e6a3430fef4781739d65917cb95d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a5df926995f8b1dbe258ca57432a6fe31e6a3430fef4781739d65917cb95d133->leave($__internal_a5df926995f8b1dbe258ca57432a6fe31e6a3430fef4781739d65917cb95d133_prof);

        
        $__internal_b0a736c6444130e62f3d20135a8804cec0db7e2cbe4bc61b401ac94e424157cc->leave($__internal_b0a736c6444130e62f3d20135a8804cec0db7e2cbe4bc61b401ac94e424157cc_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_15285d42ef70eaddc4d0e09e7fb64810d2af9774b5d7820c386d4737279c3296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15285d42ef70eaddc4d0e09e7fb64810d2af9774b5d7820c386d4737279c3296->enter($__internal_15285d42ef70eaddc4d0e09e7fb64810d2af9774b5d7820c386d4737279c3296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3bc6816713f1106a0d2132b374721e1c3831847eeb8dee6dcb4c03e1b1842c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc6816713f1106a0d2132b374721e1c3831847eeb8dee6dcb4c03e1b1842c5f->enter($__internal_3bc6816713f1106a0d2132b374721e1c3831847eeb8dee6dcb4c03e1b1842c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 48
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 63
        echo "
                                ";
        // line 64
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 65
            echo "                                    <li>
                                        <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 71
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 80
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_3bc6816713f1106a0d2132b374721e1c3831847eeb8dee6dcb4c03e1b1842c5f->leave($__internal_3bc6816713f1106a0d2132b374721e1c3831847eeb8dee6dcb4c03e1b1842c5f_prof);

        
        $__internal_15285d42ef70eaddc4d0e09e7fb64810d2af9774b5d7820c386d4737279c3296->leave($__internal_15285d42ef70eaddc4d0e09e7fb64810d2af9774b5d7820c386d4737279c3296_prof);

    }

    // line 48
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_78cb7eca74a63262ad932684c33d96c1375d288ada27ddcc903b53c18d31c34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cb7eca74a63262ad932684c33d96c1375d288ada27ddcc903b53c18d31c34c->enter($__internal_78cb7eca74a63262ad932684c33d96c1375d288ada27ddcc903b53c18d31c34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_f4c252480372cc10e6fd0b3d2e878925762a424aa753d53bf92f254d1e6a4f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c252480372cc10e6fd0b3d2e878925762a424aa753d53bf92f254d1e6a4f6f->enter($__internal_f4c252480372cc10e6fd0b3d2e878925762a424aa753d53bf92f254d1e6a4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 49
        echo "                                    <li>
                                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                                        <li>
                                            <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 62
        echo "                                ";
        
        $__internal_f4c252480372cc10e6fd0b3d2e878925762a424aa753d53bf92f254d1e6a4f6f->leave($__internal_f4c252480372cc10e6fd0b3d2e878925762a424aa753d53bf92f254d1e6a4f6f_prof);

        
        $__internal_78cb7eca74a63262ad932684c33d96c1375d288ada27ddcc903b53c18d31c34c->leave($__internal_78cb7eca74a63262ad932684c33d96c1375d288ada27ddcc903b53c18d31c34c_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_eca6e6a1db7f02e297bbf504c0f34ee74e741eff2eb0df213d195fef8ac8f13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca6e6a1db7f02e297bbf504c0f34ee74e741eff2eb0df213d195fef8ac8f13b->enter($__internal_eca6e6a1db7f02e297bbf504c0f34ee74e741eff2eb0df213d195fef8ac8f13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c90fdb44a0e57f2ee95ca159bc8faf7c5faa855908c03ad23be8f9cb88210f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90fdb44a0e57f2ee95ca159bc8faf7c5faa855908c03ad23be8f9cb88210f85->enter($__internal_c90fdb44a0e57f2ee95ca159bc8faf7c5faa855908c03ad23be8f9cb88210f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 95
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 97
        $this->displayBlock('main', $context, $blocks);
        // line 98
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 101
        $this->displayBlock('sidebar', $context, $blocks);
        // line 108
        echo "                    </div>
                </div>
            ";
        
        $__internal_c90fdb44a0e57f2ee95ca159bc8faf7c5faa855908c03ad23be8f9cb88210f85->leave($__internal_c90fdb44a0e57f2ee95ca159bc8faf7c5faa855908c03ad23be8f9cb88210f85_prof);

        
        $__internal_eca6e6a1db7f02e297bbf504c0f34ee74e741eff2eb0df213d195fef8ac8f13b->leave($__internal_eca6e6a1db7f02e297bbf504c0f34ee74e741eff2eb0df213d195fef8ac8f13b_prof);

    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
        $__internal_3ec71b02cbfe230d330f59d031fae5cb75d8af49e0e44b8d19158d947c2f7757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec71b02cbfe230d330f59d031fae5cb75d8af49e0e44b8d19158d947c2f7757->enter($__internal_3ec71b02cbfe230d330f59d031fae5cb75d8af49e0e44b8d19158d947c2f7757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_894943d2bfd037f6ec71e98de917f424349095bcd50b454f0651b72958e94c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894943d2bfd037f6ec71e98de917f424349095bcd50b454f0651b72958e94c59->enter($__internal_894943d2bfd037f6ec71e98de917f424349095bcd50b454f0651b72958e94c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_894943d2bfd037f6ec71e98de917f424349095bcd50b454f0651b72958e94c59->leave($__internal_894943d2bfd037f6ec71e98de917f424349095bcd50b454f0651b72958e94c59_prof);

        
        $__internal_3ec71b02cbfe230d330f59d031fae5cb75d8af49e0e44b8d19158d947c2f7757->leave($__internal_3ec71b02cbfe230d330f59d031fae5cb75d8af49e0e44b8d19158d947c2f7757_prof);

    }

    // line 101
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d73af60f851f1be1b63d8ddb8f4b0a152c7a8bb21b937965e6d7c968a9a126b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73af60f851f1be1b63d8ddb8f4b0a152c7a8bb21b937965e6d7c968a9a126b6->enter($__internal_d73af60f851f1be1b63d8ddb8f4b0a152c7a8bb21b937965e6d7c968a9a126b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_7d2ee5f4617d58ada451251a60d7446c9bb957902022960758fe9507bdf9849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2ee5f4617d58ada451251a60d7446c9bb957902022960758fe9507bdf9849b->enter($__internal_7d2ee5f4617d58ada451251a60d7446c9bb957902022960758fe9507bdf9849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 105
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 106
        echo "
                        ";
        
        $__internal_7d2ee5f4617d58ada451251a60d7446c9bb957902022960758fe9507bdf9849b->leave($__internal_7d2ee5f4617d58ada451251a60d7446c9bb957902022960758fe9507bdf9849b_prof);

        
        $__internal_d73af60f851f1be1b63d8ddb8f4b0a152c7a8bb21b937965e6d7c968a9a126b6->leave($__internal_d73af60f851f1be1b63d8ddb8f4b0a152c7a8bb21b937965e6d7c968a9a126b6_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_766e67314ba732de84ebf30e94fa29bf64a86256c08ac85d49cd0673183ecaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766e67314ba732de84ebf30e94fa29bf64a86256c08ac85d49cd0673183ecaf6->enter($__internal_766e67314ba732de84ebf30e94fa29bf64a86256c08ac85d49cd0673183ecaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_03505a61e62e22cf9043d2037a48ac66690095346a5ca172de7eae04d32fb973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03505a61e62e22cf9043d2037a48ac66690095346a5ca172de7eae04d32fb973->enter($__internal_03505a61e62e22cf9043d2037a48ac66690095346a5ca172de7eae04d32fb973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_03505a61e62e22cf9043d2037a48ac66690095346a5ca172de7eae04d32fb973->leave($__internal_03505a61e62e22cf9043d2037a48ac66690095346a5ca172de7eae04d32fb973_prof);

        
        $__internal_766e67314ba732de84ebf30e94fa29bf64a86256c08ac85d49cd0673183ecaf6->leave($__internal_766e67314ba732de84ebf30e94fa29bf64a86256c08ac85d49cd0673183ecaf6_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f79e362977f7a460746633e2aba931ce7f8d305457bcb7817021b5f0f1952cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f79e362977f7a460746633e2aba931ce7f8d305457bcb7817021b5f0f1952cc->enter($__internal_0f79e362977f7a460746633e2aba931ce7f8d305457bcb7817021b5f0f1952cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e7265c5a8c1f2d37e32b278ea743dc09372312e3b000288101b844819e5ab573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7265c5a8c1f2d37e32b278ea743dc09372312e3b000288101b844819e5ab573->enter($__internal_e7265c5a8c1f2d37e32b278ea743dc09372312e3b000288101b844819e5ab573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e7265c5a8c1f2d37e32b278ea743dc09372312e3b000288101b844819e5ab573->leave($__internal_e7265c5a8c1f2d37e32b278ea743dc09372312e3b000288101b844819e5ab573_prof);

        
        $__internal_0f79e362977f7a460746633e2aba931ce7f8d305457bcb7817021b5f0f1952cc->leave($__internal_0f79e362977f7a460746633e2aba931ce7f8d305457bcb7817021b5f0f1952cc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 146,  503 => 145,  499 => 144,  495 => 143,  491 => 142,  487 => 141,  482 => 140,  473 => 139,  444 => 119,  440 => 118,  434 => 114,  425 => 113,  414 => 106,  412 => 105,  410 => 102,  401 => 101,  384 => 97,  372 => 108,  370 => 101,  365 => 98,  363 => 97,  358 => 95,  354 => 93,  345 => 92,  335 => 62,  328 => 58,  324 => 57,  321 => 56,  319 => 55,  312 => 51,  308 => 50,  305 => 49,  296 => 48,  279 => 82,  262 => 80,  258 => 79,  252 => 76,  245 => 71,  238 => 67,  234 => 66,  231 => 65,  229 => 64,  226 => 63,  224 => 48,  212 => 39,  202 => 32,  196 => 28,  187 => 27,  170 => 25,  158 => 20,  154 => 19,  150 => 18,  146 => 17,  142 => 16,  138 => 15,  133 => 14,  124 => 13,  106 => 11,  91 => 152,  88 => 148,  86 => 139,  83 => 138,  81 => 113,  77 => 111,  75 => 92,  71 => 90,  69 => 27,  64 => 25,  57 => 22,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-tagsinput.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-tagsinput.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\base.html.twig");
    }
}
