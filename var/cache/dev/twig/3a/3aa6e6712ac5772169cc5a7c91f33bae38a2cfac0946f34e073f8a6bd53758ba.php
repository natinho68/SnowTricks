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
        $__internal_af95c1ab28cbe29ac9133cbd6417b0b12e5350b69cde7580b04b60be289d6a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af95c1ab28cbe29ac9133cbd6417b0b12e5350b69cde7580b04b60be289d6a28->enter($__internal_af95c1ab28cbe29ac9133cbd6417b0b12e5350b69cde7580b04b60be289d6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_1e171a9ca38b7c3cd96f163cb36edad095408dea45de910eefa6a1abcf963384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e171a9ca38b7c3cd96f163cb36edad095408dea45de910eefa6a1abcf963384->enter($__internal_1e171a9ca38b7c3cd96f163cb36edad095408dea45de910eefa6a1abcf963384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af95c1ab28cbe29ac9133cbd6417b0b12e5350b69cde7580b04b60be289d6a28->leave($__internal_af95c1ab28cbe29ac9133cbd6417b0b12e5350b69cde7580b04b60be289d6a28_prof);

        
        $__internal_1e171a9ca38b7c3cd96f163cb36edad095408dea45de910eefa6a1abcf963384->leave($__internal_1e171a9ca38b7c3cd96f163cb36edad095408dea45de910eefa6a1abcf963384_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca68b0f179510df6ce2b1a0010131e76656c29582ea2a595b5a41892da6c5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca68b0f179510df6ce2b1a0010131e76656c29582ea2a595b5a41892da6c5e7->enter($__internal_bca68b0f179510df6ce2b1a0010131e76656c29582ea2a595b5a41892da6c5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97f1ff10abfd2fe8e5ac30f32f10695380402b9764ed45ebb246f400be469fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1ff10abfd2fe8e5ac30f32f10695380402b9764ed45ebb246f400be469fa4->enter($__internal_97f1ff10abfd2fe8e5ac30f32f10695380402b9764ed45ebb246f400be469fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_97f1ff10abfd2fe8e5ac30f32f10695380402b9764ed45ebb246f400be469fa4->leave($__internal_97f1ff10abfd2fe8e5ac30f32f10695380402b9764ed45ebb246f400be469fa4_prof);

        
        $__internal_bca68b0f179510df6ce2b1a0010131e76656c29582ea2a595b5a41892da6c5e7->leave($__internal_bca68b0f179510df6ce2b1a0010131e76656c29582ea2a595b5a41892da6c5e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa243530d870b966af53c3b2b2aa5ce148db9dcc58106510d1650737db1d254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa243530d870b966af53c3b2b2aa5ce148db9dcc58106510d1650737db1d254->enter($__internal_8aa243530d870b966af53c3b2b2aa5ce148db9dcc58106510d1650737db1d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2cebf0f793aaa8e4173198f6107bdb9d0af6fe2f529c767b69ad755f7c23e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cebf0f793aaa8e4173198f6107bdb9d0af6fe2f529c767b69ad755f7c23e4b->enter($__internal_f2cebf0f793aaa8e4173198f6107bdb9d0af6fe2f529c767b69ad755f7c23e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2cebf0f793aaa8e4173198f6107bdb9d0af6fe2f529c767b69ad755f7c23e4b->leave($__internal_f2cebf0f793aaa8e4173198f6107bdb9d0af6fe2f529c767b69ad755f7c23e4b_prof);

        
        $__internal_8aa243530d870b966af53c3b2b2aa5ce148db9dcc58106510d1650737db1d254->leave($__internal_8aa243530d870b966af53c3b2b2aa5ce148db9dcc58106510d1650737db1d254_prof);

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
