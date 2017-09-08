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
        $__internal_147be964bcd37deb4dc46585df9863a332ac1a4be18d69fa89ac95d24af2768f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147be964bcd37deb4dc46585df9863a332ac1a4be18d69fa89ac95d24af2768f->enter($__internal_147be964bcd37deb4dc46585df9863a332ac1a4be18d69fa89ac95d24af2768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_64cf8d561b89a2991a51c2b1f8f3f75aad0d9373dca68516b6ed717c5dd727e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cf8d561b89a2991a51c2b1f8f3f75aad0d9373dca68516b6ed717c5dd727e6->enter($__internal_64cf8d561b89a2991a51c2b1f8f3f75aad0d9373dca68516b6ed717c5dd727e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147be964bcd37deb4dc46585df9863a332ac1a4be18d69fa89ac95d24af2768f->leave($__internal_147be964bcd37deb4dc46585df9863a332ac1a4be18d69fa89ac95d24af2768f_prof);

        
        $__internal_64cf8d561b89a2991a51c2b1f8f3f75aad0d9373dca68516b6ed717c5dd727e6->leave($__internal_64cf8d561b89a2991a51c2b1f8f3f75aad0d9373dca68516b6ed717c5dd727e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96f30dec182023572ccafba5d0358e87626d3baf998ed93d5102f9feac2d32cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f30dec182023572ccafba5d0358e87626d3baf998ed93d5102f9feac2d32cf->enter($__internal_96f30dec182023572ccafba5d0358e87626d3baf998ed93d5102f9feac2d32cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26aeedb8195e8aca4b10c5d9a08a1eed841d810662dac0e807c0fb93a1cf0e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aeedb8195e8aca4b10c5d9a08a1eed841d810662dac0e807c0fb93a1cf0e40->enter($__internal_26aeedb8195e8aca4b10c5d9a08a1eed841d810662dac0e807c0fb93a1cf0e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_26aeedb8195e8aca4b10c5d9a08a1eed841d810662dac0e807c0fb93a1cf0e40->leave($__internal_26aeedb8195e8aca4b10c5d9a08a1eed841d810662dac0e807c0fb93a1cf0e40_prof);

        
        $__internal_96f30dec182023572ccafba5d0358e87626d3baf998ed93d5102f9feac2d32cf->leave($__internal_96f30dec182023572ccafba5d0358e87626d3baf998ed93d5102f9feac2d32cf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c1ff8d030c63a54db10af09fbad9086355f8c8944b9f6cd8b55edcf201b8b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1ff8d030c63a54db10af09fbad9086355f8c8944b9f6cd8b55edcf201b8b07->enter($__internal_5c1ff8d030c63a54db10af09fbad9086355f8c8944b9f6cd8b55edcf201b8b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_407b752939dc073a909ceeebb8c2b48e3d8cbdfb6ca326f20eab2bda2c2c758a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407b752939dc073a909ceeebb8c2b48e3d8cbdfb6ca326f20eab2bda2c2c758a->enter($__internal_407b752939dc073a909ceeebb8c2b48e3d8cbdfb6ca326f20eab2bda2c2c758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_407b752939dc073a909ceeebb8c2b48e3d8cbdfb6ca326f20eab2bda2c2c758a->leave($__internal_407b752939dc073a909ceeebb8c2b48e3d8cbdfb6ca326f20eab2bda2c2c758a_prof);

        
        $__internal_5c1ff8d030c63a54db10af09fbad9086355f8c8944b9f6cd8b55edcf201b8b07->leave($__internal_5c1ff8d030c63a54db10af09fbad9086355f8c8944b9f6cd8b55edcf201b8b07_prof);

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


{% endblock %}", "TwigBundle:Exception:error.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
