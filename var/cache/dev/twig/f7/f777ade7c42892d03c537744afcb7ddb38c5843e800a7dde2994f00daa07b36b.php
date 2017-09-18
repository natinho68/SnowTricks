<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b7fb912a3210372fa146cb1091a9afc7276463a833acc3ceff09a8f31da91ef5 extends Twig_Template
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
        $__internal_97b6dfd12ad28b2065c828d08dc4ed41b68dc5c1ea90c2b0e58e1d6191f392ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b6dfd12ad28b2065c828d08dc4ed41b68dc5c1ea90c2b0e58e1d6191f392ed->enter($__internal_97b6dfd12ad28b2065c828d08dc4ed41b68dc5c1ea90c2b0e58e1d6191f392ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_34c89c6124fc952f6bda0b74f43a86283d02fe1d91ee696e0d53874eb16675e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c89c6124fc952f6bda0b74f43a86283d02fe1d91ee696e0d53874eb16675e6->enter($__internal_34c89c6124fc952f6bda0b74f43a86283d02fe1d91ee696e0d53874eb16675e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_97b6dfd12ad28b2065c828d08dc4ed41b68dc5c1ea90c2b0e58e1d6191f392ed->leave($__internal_97b6dfd12ad28b2065c828d08dc4ed41b68dc5c1ea90c2b0e58e1d6191f392ed_prof);

        
        $__internal_34c89c6124fc952f6bda0b74f43a86283d02fe1d91ee696e0d53874eb16675e6->leave($__internal_34c89c6124fc952f6bda0b74f43a86283d02fe1d91ee696e0d53874eb16675e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
