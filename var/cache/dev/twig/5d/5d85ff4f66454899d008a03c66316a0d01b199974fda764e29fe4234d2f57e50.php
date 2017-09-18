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
        $__internal_1fbbe2e4da05252cd7463376b680ea2f649534b43d58613da097dd1b2af7f604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbbe2e4da05252cd7463376b680ea2f649534b43d58613da097dd1b2af7f604->enter($__internal_1fbbe2e4da05252cd7463376b680ea2f649534b43d58613da097dd1b2af7f604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dc3080f785631444855c0e5f1951a48276aa9a535a30295ca05ecd4ef9fe808b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3080f785631444855c0e5f1951a48276aa9a535a30295ca05ecd4ef9fe808b->enter($__internal_dc3080f785631444855c0e5f1951a48276aa9a535a30295ca05ecd4ef9fe808b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1fbbe2e4da05252cd7463376b680ea2f649534b43d58613da097dd1b2af7f604->leave($__internal_1fbbe2e4da05252cd7463376b680ea2f649534b43d58613da097dd1b2af7f604_prof);

        
        $__internal_dc3080f785631444855c0e5f1951a48276aa9a535a30295ca05ecd4ef9fe808b->leave($__internal_dc3080f785631444855c0e5f1951a48276aa9a535a30295ca05ecd4ef9fe808b_prof);

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
