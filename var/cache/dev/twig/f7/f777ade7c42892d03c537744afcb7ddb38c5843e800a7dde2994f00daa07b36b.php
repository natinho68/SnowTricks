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
        $__internal_f3127366fa2ced246413fcfc7be12ef963ce53a308c96a974703966c52699e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3127366fa2ced246413fcfc7be12ef963ce53a308c96a974703966c52699e76->enter($__internal_f3127366fa2ced246413fcfc7be12ef963ce53a308c96a974703966c52699e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ba35d81b61d37ce3811ee3cd61774cedb8e713fa35ead103c1401c9dcbdb4140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba35d81b61d37ce3811ee3cd61774cedb8e713fa35ead103c1401c9dcbdb4140->enter($__internal_ba35d81b61d37ce3811ee3cd61774cedb8e713fa35ead103c1401c9dcbdb4140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f3127366fa2ced246413fcfc7be12ef963ce53a308c96a974703966c52699e76->leave($__internal_f3127366fa2ced246413fcfc7be12ef963ce53a308c96a974703966c52699e76_prof);

        
        $__internal_ba35d81b61d37ce3811ee3cd61774cedb8e713fa35ead103c1401c9dcbdb4140->leave($__internal_ba35d81b61d37ce3811ee3cd61774cedb8e713fa35ead103c1401c9dcbdb4140_prof);

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
