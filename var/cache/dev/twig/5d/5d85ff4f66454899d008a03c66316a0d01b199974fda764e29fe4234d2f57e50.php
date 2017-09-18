<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_aa0560fbe114b570bb36c1f27e3075f2a24e7c05756b837c6633a1bff6a44615 extends Twig_Template
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
        $__internal_98266b96ecd8902c83dccde0ae5bdb17b16397206bb1b377984f7bfa9247b1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98266b96ecd8902c83dccde0ae5bdb17b16397206bb1b377984f7bfa9247b1cb->enter($__internal_98266b96ecd8902c83dccde0ae5bdb17b16397206bb1b377984f7bfa9247b1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dc42e45ff2aa2f81fa2fe78d025109aa4d6be479da5fa084aa6bba786b5ec434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc42e45ff2aa2f81fa2fe78d025109aa4d6be479da5fa084aa6bba786b5ec434->enter($__internal_dc42e45ff2aa2f81fa2fe78d025109aa4d6be479da5fa084aa6bba786b5ec434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_98266b96ecd8902c83dccde0ae5bdb17b16397206bb1b377984f7bfa9247b1cb->leave($__internal_98266b96ecd8902c83dccde0ae5bdb17b16397206bb1b377984f7bfa9247b1cb_prof);

        
        $__internal_dc42e45ff2aa2f81fa2fe78d025109aa4d6be479da5fa084aa6bba786b5ec434->leave($__internal_dc42e45ff2aa2f81fa2fe78d025109aa4d6be479da5fa084aa6bba786b5ec434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
