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
        $__internal_955464052fe4ea1620228fcc6e1c4bce9cb3571ca39f0fbba8f35011004c6d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955464052fe4ea1620228fcc6e1c4bce9cb3571ca39f0fbba8f35011004c6d0d->enter($__internal_955464052fe4ea1620228fcc6e1c4bce9cb3571ca39f0fbba8f35011004c6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_eec0ade5cd29f49ef9da26edcd1e9798a0e1b7b6f5c6fcd661e39316cde0eb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec0ade5cd29f49ef9da26edcd1e9798a0e1b7b6f5c6fcd661e39316cde0eb13->enter($__internal_eec0ade5cd29f49ef9da26edcd1e9798a0e1b7b6f5c6fcd661e39316cde0eb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_955464052fe4ea1620228fcc6e1c4bce9cb3571ca39f0fbba8f35011004c6d0d->leave($__internal_955464052fe4ea1620228fcc6e1c4bce9cb3571ca39f0fbba8f35011004c6d0d_prof);

        
        $__internal_eec0ade5cd29f49ef9da26edcd1e9798a0e1b7b6f5c6fcd661e39316cde0eb13->leave($__internal_eec0ade5cd29f49ef9da26edcd1e9798a0e1b7b6f5c6fcd661e39316cde0eb13_prof);

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
