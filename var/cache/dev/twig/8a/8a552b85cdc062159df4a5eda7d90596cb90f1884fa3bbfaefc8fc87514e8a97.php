<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ebbf784bfc08a546b201fd8c354b54daa8243d1b7199aff3b7382b50acf64c05 extends Twig_Template
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
        $__internal_bfceb02d8b7ae749c2d30fef873eb578f20825090e5eb8d348d1c95e68fb1a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfceb02d8b7ae749c2d30fef873eb578f20825090e5eb8d348d1c95e68fb1a5d->enter($__internal_bfceb02d8b7ae749c2d30fef873eb578f20825090e5eb8d348d1c95e68fb1a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_565a74a3dbca0e3b1a07dab652a6d7fe98bc1e38a4b03e99a2f47405253bc553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565a74a3dbca0e3b1a07dab652a6d7fe98bc1e38a4b03e99a2f47405253bc553->enter($__internal_565a74a3dbca0e3b1a07dab652a6d7fe98bc1e38a4b03e99a2f47405253bc553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bfceb02d8b7ae749c2d30fef873eb578f20825090e5eb8d348d1c95e68fb1a5d->leave($__internal_bfceb02d8b7ae749c2d30fef873eb578f20825090e5eb8d348d1c95e68fb1a5d_prof);

        
        $__internal_565a74a3dbca0e3b1a07dab652a6d7fe98bc1e38a4b03e99a2f47405253bc553->leave($__internal_565a74a3dbca0e3b1a07dab652a6d7fe98bc1e38a4b03e99a2f47405253bc553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
