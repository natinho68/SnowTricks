<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8f888cb4b2cc6875df7ea15c13c2454f8f53a48164969c0decce1fbd844682d extends Twig_Template
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
        $__internal_eaf81f29f28d8df6f0e201467964492bee97c9d963f44d909b3cd38d399ee16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf81f29f28d8df6f0e201467964492bee97c9d963f44d909b3cd38d399ee16e->enter($__internal_eaf81f29f28d8df6f0e201467964492bee97c9d963f44d909b3cd38d399ee16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5df8925984d684e4828c988b1f5ba5aa3d7f9381d8d88d3067fd50d0bc0dbb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df8925984d684e4828c988b1f5ba5aa3d7f9381d8d88d3067fd50d0bc0dbb8b->enter($__internal_5df8925984d684e4828c988b1f5ba5aa3d7f9381d8d88d3067fd50d0bc0dbb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eaf81f29f28d8df6f0e201467964492bee97c9d963f44d909b3cd38d399ee16e->leave($__internal_eaf81f29f28d8df6f0e201467964492bee97c9d963f44d909b3cd38d399ee16e_prof);

        
        $__internal_5df8925984d684e4828c988b1f5ba5aa3d7f9381d8d88d3067fd50d0bc0dbb8b->leave($__internal_5df8925984d684e4828c988b1f5ba5aa3d7f9381d8d88d3067fd50d0bc0dbb8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
