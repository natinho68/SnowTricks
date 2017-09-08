<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ebda9fc8a1241e02beba3c0ba1d8496d1ff2cfa25232ead0dd411266372bf35 extends Twig_Template
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
        $__internal_4ac10b3a27984a4fa723d8c3a25a90d8a2788e07950364aadcacff3ca3f87f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac10b3a27984a4fa723d8c3a25a90d8a2788e07950364aadcacff3ca3f87f3b->enter($__internal_4ac10b3a27984a4fa723d8c3a25a90d8a2788e07950364aadcacff3ca3f87f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_00898d5a01661d7c919b3d41030e3a5428dee579f89df78bd6e3036d92b144a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00898d5a01661d7c919b3d41030e3a5428dee579f89df78bd6e3036d92b144a0->enter($__internal_00898d5a01661d7c919b3d41030e3a5428dee579f89df78bd6e3036d92b144a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4ac10b3a27984a4fa723d8c3a25a90d8a2788e07950364aadcacff3ca3f87f3b->leave($__internal_4ac10b3a27984a4fa723d8c3a25a90d8a2788e07950364aadcacff3ca3f87f3b_prof);

        
        $__internal_00898d5a01661d7c919b3d41030e3a5428dee579f89df78bd6e3036d92b144a0->leave($__internal_00898d5a01661d7c919b3d41030e3a5428dee579f89df78bd6e3036d92b144a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
