<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f148fa25fac21362cb4bcaa877387459178e664cf878ee2ec52e0542741f1fb6 extends Twig_Template
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
        $__internal_8b624a5ef04398267985a6780daf8be0cdb69555c0c558a211bff99171c33e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b624a5ef04398267985a6780daf8be0cdb69555c0c558a211bff99171c33e76->enter($__internal_8b624a5ef04398267985a6780daf8be0cdb69555c0c558a211bff99171c33e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_01723d02e72c2decd161ff18f304d0913a13a94a195910a0cf08b56eb321ec1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01723d02e72c2decd161ff18f304d0913a13a94a195910a0cf08b56eb321ec1a->enter($__internal_01723d02e72c2decd161ff18f304d0913a13a94a195910a0cf08b56eb321ec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8b624a5ef04398267985a6780daf8be0cdb69555c0c558a211bff99171c33e76->leave($__internal_8b624a5ef04398267985a6780daf8be0cdb69555c0c558a211bff99171c33e76_prof);

        
        $__internal_01723d02e72c2decd161ff18f304d0913a13a94a195910a0cf08b56eb321ec1a->leave($__internal_01723d02e72c2decd161ff18f304d0913a13a94a195910a0cf08b56eb321ec1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
