<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_34d1c48f3841aed47406a42f1d6d8a993b8f6800f37ef9d589a6f4b9552c68c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_156c8c17054d212012af419c116f08da6705c808fb10232a3e2eacd484782cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156c8c17054d212012af419c116f08da6705c808fb10232a3e2eacd484782cce->enter($__internal_156c8c17054d212012af419c116f08da6705c808fb10232a3e2eacd484782cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_9c6608b949e968c2c017da2fc4dea69a1d3e16e23b6cfe4f13072e4920e9bc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6608b949e968c2c017da2fc4dea69a1d3e16e23b6cfe4f13072e4920e9bc7e->enter($__internal_9c6608b949e968c2c017da2fc4dea69a1d3e16e23b6cfe4f13072e4920e9bc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156c8c17054d212012af419c116f08da6705c808fb10232a3e2eacd484782cce->leave($__internal_156c8c17054d212012af419c116f08da6705c808fb10232a3e2eacd484782cce_prof);

        
        $__internal_9c6608b949e968c2c017da2fc4dea69a1d3e16e23b6cfe4f13072e4920e9bc7e->leave($__internal_9c6608b949e968c2c017da2fc4dea69a1d3e16e23b6cfe4f13072e4920e9bc7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c0a4b705c2fbd6f277a5fdd13f165a7175d093c3f773269333cba996d01836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c0a4b705c2fbd6f277a5fdd13f165a7175d093c3f773269333cba996d01836->enter($__internal_57c0a4b705c2fbd6f277a5fdd13f165a7175d093c3f773269333cba996d01836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cf612ab2561b52e105d58938012306db6313593ec41a49e15dc2b30fa54636d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf612ab2561b52e105d58938012306db6313593ec41a49e15dc2b30fa54636d->enter($__internal_8cf612ab2561b52e105d58938012306db6313593ec41a49e15dc2b30fa54636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8cf612ab2561b52e105d58938012306db6313593ec41a49e15dc2b30fa54636d->leave($__internal_8cf612ab2561b52e105d58938012306db6313593ec41a49e15dc2b30fa54636d_prof);

        
        $__internal_57c0a4b705c2fbd6f277a5fdd13f165a7175d093c3f773269333cba996d01836->leave($__internal_57c0a4b705c2fbd6f277a5fdd13f165a7175d093c3f773269333cba996d01836_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fedd5bb95ee542507aeba53fdeb8109d8f178dd9c6aa61b7b1b3c85b87afe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fedd5bb95ee542507aeba53fdeb8109d8f178dd9c6aa61b7b1b3c85b87afe9->enter($__internal_f3fedd5bb95ee542507aeba53fdeb8109d8f178dd9c6aa61b7b1b3c85b87afe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86d57dd419c657945af67949c1528676710d7037a4219e9be655b2ba47eaf87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d57dd419c657945af67949c1528676710d7037a4219e9be655b2ba47eaf87c->enter($__internal_86d57dd419c657945af67949c1528676710d7037a4219e9be655b2ba47eaf87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/lost.jpg"), "html", null, true);
        echo "\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


";
        
        $__internal_86d57dd419c657945af67949c1528676710d7037a4219e9be655b2ba47eaf87c->leave($__internal_86d57dd419c657945af67949c1528676710d7037a4219e9be655b2ba47eaf87c_prof);

        
        $__internal_f3fedd5bb95ee542507aeba53fdeb8109d8f178dd9c6aa61b7b1b3c85b87afe9->leave($__internal_f3fedd5bb95ee542507aeba53fdeb8109d8f178dd9c6aa61b7b1b3c85b87afe9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  83 => 14,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    404 Not Found ! - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"{{ asset('uploads/img/lost.jpg') }}\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"{{ status_code }} {{ status_text }}\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


{% endblock %}
", "TwigBundle:Exception:error.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
