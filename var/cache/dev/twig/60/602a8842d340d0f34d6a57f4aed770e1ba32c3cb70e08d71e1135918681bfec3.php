<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59ac452d7b6fe043af2e999a7a4a1daae2629df18965a14e2fd59f3dd44a6d76 extends Twig_Template
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
        $__internal_4b171bfc93abd15206ff9375fe66697261c3c4a82fec345b96c10d989c2235b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b171bfc93abd15206ff9375fe66697261c3c4a82fec345b96c10d989c2235b1->enter($__internal_4b171bfc93abd15206ff9375fe66697261c3c4a82fec345b96c10d989c2235b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_04a8c1c30f256128be30aefe4035274ec4cfb24929a97660fe3f5bc8a6ff9eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a8c1c30f256128be30aefe4035274ec4cfb24929a97660fe3f5bc8a6ff9eda->enter($__internal_04a8c1c30f256128be30aefe4035274ec4cfb24929a97660fe3f5bc8a6ff9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4b171bfc93abd15206ff9375fe66697261c3c4a82fec345b96c10d989c2235b1->leave($__internal_4b171bfc93abd15206ff9375fe66697261c3c4a82fec345b96c10d989c2235b1_prof);

        
        $__internal_04a8c1c30f256128be30aefe4035274ec4cfb24929a97660fe3f5bc8a6ff9eda->leave($__internal_04a8c1c30f256128be30aefe4035274ec4cfb24929a97660fe3f5bc8a6ff9eda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
