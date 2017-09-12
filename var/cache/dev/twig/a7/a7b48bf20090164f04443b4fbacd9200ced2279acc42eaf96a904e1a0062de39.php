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
        $__internal_8781a5309461014c3d29c8a17a135da22bef031146efd7deb32340be5ad22932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8781a5309461014c3d29c8a17a135da22bef031146efd7deb32340be5ad22932->enter($__internal_8781a5309461014c3d29c8a17a135da22bef031146efd7deb32340be5ad22932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_73b3567a090688e77fc756af862a21379ad59e2ed127c6bc6781757eb098bdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b3567a090688e77fc756af862a21379ad59e2ed127c6bc6781757eb098bdf7->enter($__internal_73b3567a090688e77fc756af862a21379ad59e2ed127c6bc6781757eb098bdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8781a5309461014c3d29c8a17a135da22bef031146efd7deb32340be5ad22932->leave($__internal_8781a5309461014c3d29c8a17a135da22bef031146efd7deb32340be5ad22932_prof);

        
        $__internal_73b3567a090688e77fc756af862a21379ad59e2ed127c6bc6781757eb098bdf7->leave($__internal_73b3567a090688e77fc756af862a21379ad59e2ed127c6bc6781757eb098bdf7_prof);

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
