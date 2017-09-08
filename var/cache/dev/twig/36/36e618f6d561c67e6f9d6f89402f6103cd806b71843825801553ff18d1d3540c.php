<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_27a3f392007cb87deb163129ba6cca9b35a91e681c4ba2b2fd87bf5359d2e89e extends Twig_Template
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
        $__internal_9ea378bf3d0fed9c234707fc6428e044febb687de3582531756ded353e794bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea378bf3d0fed9c234707fc6428e044febb687de3582531756ded353e794bb4->enter($__internal_9ea378bf3d0fed9c234707fc6428e044febb687de3582531756ded353e794bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c142d3e788ae31f6466c5b59e6ab8d2e26e7a345e8d7d5964e68712a6136a16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c142d3e788ae31f6466c5b59e6ab8d2e26e7a345e8d7d5964e68712a6136a16c->enter($__internal_c142d3e788ae31f6466c5b59e6ab8d2e26e7a345e8d7d5964e68712a6136a16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9ea378bf3d0fed9c234707fc6428e044febb687de3582531756ded353e794bb4->leave($__internal_9ea378bf3d0fed9c234707fc6428e044febb687de3582531756ded353e794bb4_prof);

        
        $__internal_c142d3e788ae31f6466c5b59e6ab8d2e26e7a345e8d7d5964e68712a6136a16c->leave($__internal_c142d3e788ae31f6466c5b59e6ab8d2e26e7a345e8d7d5964e68712a6136a16c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
