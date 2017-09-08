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
        $__internal_86f29c6918e71aba7bf71387a79f26443d373aff805b1c8484622370855af22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f29c6918e71aba7bf71387a79f26443d373aff805b1c8484622370855af22b->enter($__internal_86f29c6918e71aba7bf71387a79f26443d373aff805b1c8484622370855af22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fd43a7402a74050f015ce9737b58089073a33f31813ebb719fdf394c2f0059c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd43a7402a74050f015ce9737b58089073a33f31813ebb719fdf394c2f0059c3->enter($__internal_fd43a7402a74050f015ce9737b58089073a33f31813ebb719fdf394c2f0059c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_86f29c6918e71aba7bf71387a79f26443d373aff805b1c8484622370855af22b->leave($__internal_86f29c6918e71aba7bf71387a79f26443d373aff805b1c8484622370855af22b_prof);

        
        $__internal_fd43a7402a74050f015ce9737b58089073a33f31813ebb719fdf394c2f0059c3->leave($__internal_fd43a7402a74050f015ce9737b58089073a33f31813ebb719fdf394c2f0059c3_prof);

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
