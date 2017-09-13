<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_530200b443199baf08c5448d10aa713924815ab41c12095a45db150991b9f05d extends Twig_Template
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
        $__internal_0818acdcfd4a3c4a313dbcdb216aacb6824608a60fa8a8989f43976e59ca2c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0818acdcfd4a3c4a313dbcdb216aacb6824608a60fa8a8989f43976e59ca2c29->enter($__internal_0818acdcfd4a3c4a313dbcdb216aacb6824608a60fa8a8989f43976e59ca2c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e1432544a70f4fe2e214fb2e240e7874e998d00be0467350f8e643779f05d892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1432544a70f4fe2e214fb2e240e7874e998d00be0467350f8e643779f05d892->enter($__internal_e1432544a70f4fe2e214fb2e240e7874e998d00be0467350f8e643779f05d892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0818acdcfd4a3c4a313dbcdb216aacb6824608a60fa8a8989f43976e59ca2c29->leave($__internal_0818acdcfd4a3c4a313dbcdb216aacb6824608a60fa8a8989f43976e59ca2c29_prof);

        
        $__internal_e1432544a70f4fe2e214fb2e240e7874e998d00be0467350f8e643779f05d892->leave($__internal_e1432544a70f4fe2e214fb2e240e7874e998d00be0467350f8e643779f05d892_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
