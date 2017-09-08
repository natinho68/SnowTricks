<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1900a42fa54ad6cec7daa2eb9f78a5d6116f190f93cc3b764ea3f6566c3bc42b extends Twig_Template
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
        $__internal_9a6f8c37bb01aca40a9d4fe410cff292cc52e4b51fd80b9778c11e21b6a75b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6f8c37bb01aca40a9d4fe410cff292cc52e4b51fd80b9778c11e21b6a75b47->enter($__internal_9a6f8c37bb01aca40a9d4fe410cff292cc52e4b51fd80b9778c11e21b6a75b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4adfb140a34960a1e8d5863a8ee3b89714ab3d58b116d46a3bb9f5f3f43d7f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adfb140a34960a1e8d5863a8ee3b89714ab3d58b116d46a3bb9f5f3f43d7f42->enter($__internal_4adfb140a34960a1e8d5863a8ee3b89714ab3d58b116d46a3bb9f5f3f43d7f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9a6f8c37bb01aca40a9d4fe410cff292cc52e4b51fd80b9778c11e21b6a75b47->leave($__internal_9a6f8c37bb01aca40a9d4fe410cff292cc52e4b51fd80b9778c11e21b6a75b47_prof);

        
        $__internal_4adfb140a34960a1e8d5863a8ee3b89714ab3d58b116d46a3bb9f5f3f43d7f42->leave($__internal_4adfb140a34960a1e8d5863a8ee3b89714ab3d58b116d46a3bb9f5f3f43d7f42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
