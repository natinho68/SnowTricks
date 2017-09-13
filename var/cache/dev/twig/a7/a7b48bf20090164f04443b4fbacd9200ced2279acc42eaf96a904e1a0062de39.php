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
        $__internal_ce0aa8a73b4f1a3d38236e876e8c99f639b7a05c87bcce783aacc371e6a09aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0aa8a73b4f1a3d38236e876e8c99f639b7a05c87bcce783aacc371e6a09aad->enter($__internal_ce0aa8a73b4f1a3d38236e876e8c99f639b7a05c87bcce783aacc371e6a09aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bb649d8a201fd0aaf1ef57640c2064977fbec79199977df61b59597e2b361ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb649d8a201fd0aaf1ef57640c2064977fbec79199977df61b59597e2b361ad1->enter($__internal_bb649d8a201fd0aaf1ef57640c2064977fbec79199977df61b59597e2b361ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ce0aa8a73b4f1a3d38236e876e8c99f639b7a05c87bcce783aacc371e6a09aad->leave($__internal_ce0aa8a73b4f1a3d38236e876e8c99f639b7a05c87bcce783aacc371e6a09aad_prof);

        
        $__internal_bb649d8a201fd0aaf1ef57640c2064977fbec79199977df61b59597e2b361ad1->leave($__internal_bb649d8a201fd0aaf1ef57640c2064977fbec79199977df61b59597e2b361ad1_prof);

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
