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
        $__internal_c2b38a69b59af08a630b7a408bae1c167b213656352fe566b7afbc3016c85445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b38a69b59af08a630b7a408bae1c167b213656352fe566b7afbc3016c85445->enter($__internal_c2b38a69b59af08a630b7a408bae1c167b213656352fe566b7afbc3016c85445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d3d4bcf3d78e45b83604e8189cc3aee58b748ef9c6a6c9e9090c9386540dcb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d4bcf3d78e45b83604e8189cc3aee58b748ef9c6a6c9e9090c9386540dcb17->enter($__internal_d3d4bcf3d78e45b83604e8189cc3aee58b748ef9c6a6c9e9090c9386540dcb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c2b38a69b59af08a630b7a408bae1c167b213656352fe566b7afbc3016c85445->leave($__internal_c2b38a69b59af08a630b7a408bae1c167b213656352fe566b7afbc3016c85445_prof);

        
        $__internal_d3d4bcf3d78e45b83604e8189cc3aee58b748ef9c6a6c9e9090c9386540dcb17->leave($__internal_d3d4bcf3d78e45b83604e8189cc3aee58b748ef9c6a6c9e9090c9386540dcb17_prof);

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
