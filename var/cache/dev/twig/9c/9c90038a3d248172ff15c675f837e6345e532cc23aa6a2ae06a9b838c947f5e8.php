<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4504efcb1ba9b56b01467a86a1f7890cca3c585a3f0f8b9d65df2e0ae06c1442 extends Twig_Template
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
        $__internal_fccf3b19d6b136918d16d8cf01ff6f7f956b3d26047fb7b47c4ed89b921b4eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccf3b19d6b136918d16d8cf01ff6f7f956b3d26047fb7b47c4ed89b921b4eee->enter($__internal_fccf3b19d6b136918d16d8cf01ff6f7f956b3d26047fb7b47c4ed89b921b4eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e20664e0b46554109411d43de44113d664b77d808d1172c0908ec55969ba1937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20664e0b46554109411d43de44113d664b77d808d1172c0908ec55969ba1937->enter($__internal_e20664e0b46554109411d43de44113d664b77d808d1172c0908ec55969ba1937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fccf3b19d6b136918d16d8cf01ff6f7f956b3d26047fb7b47c4ed89b921b4eee->leave($__internal_fccf3b19d6b136918d16d8cf01ff6f7f956b3d26047fb7b47c4ed89b921b4eee_prof);

        
        $__internal_e20664e0b46554109411d43de44113d664b77d808d1172c0908ec55969ba1937->leave($__internal_e20664e0b46554109411d43de44113d664b77d808d1172c0908ec55969ba1937_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
