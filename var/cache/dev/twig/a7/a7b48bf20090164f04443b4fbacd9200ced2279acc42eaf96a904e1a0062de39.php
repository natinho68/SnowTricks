<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5c9375d9b89940dd81a9fa35f5a7bf7a9a9e20b5cddb35153f223565894d2c6 extends Twig_Template
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
        $__internal_6fbd931b3d68d01fe06688d0eba92a577c55d173d7a961f2af6acbb26d4d7bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbd931b3d68d01fe06688d0eba92a577c55d173d7a961f2af6acbb26d4d7bfa->enter($__internal_6fbd931b3d68d01fe06688d0eba92a577c55d173d7a961f2af6acbb26d4d7bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e8fec9c747f0bcf5c5a299bb2bfc00cb27c984833a6f6ba9786843ff1da970cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fec9c747f0bcf5c5a299bb2bfc00cb27c984833a6f6ba9786843ff1da970cf->enter($__internal_e8fec9c747f0bcf5c5a299bb2bfc00cb27c984833a6f6ba9786843ff1da970cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6fbd931b3d68d01fe06688d0eba92a577c55d173d7a961f2af6acbb26d4d7bfa->leave($__internal_6fbd931b3d68d01fe06688d0eba92a577c55d173d7a961f2af6acbb26d4d7bfa_prof);

        
        $__internal_e8fec9c747f0bcf5c5a299bb2bfc00cb27c984833a6f6ba9786843ff1da970cf->leave($__internal_e8fec9c747f0bcf5c5a299bb2bfc00cb27c984833a6f6ba9786843ff1da970cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
