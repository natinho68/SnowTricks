<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_d23121c0e6e45ab6ae1e235361f41f8824ac03aa1a35240cf5465721bcd46718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23121c0e6e45ab6ae1e235361f41f8824ac03aa1a35240cf5465721bcd46718->enter($__internal_d23121c0e6e45ab6ae1e235361f41f8824ac03aa1a35240cf5465721bcd46718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ec140141c387a55c6c80c04ebe43d0043f9f156d1516d1381d8259d5c8672258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec140141c387a55c6c80c04ebe43d0043f9f156d1516d1381d8259d5c8672258->enter($__internal_ec140141c387a55c6c80c04ebe43d0043f9f156d1516d1381d8259d5c8672258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d23121c0e6e45ab6ae1e235361f41f8824ac03aa1a35240cf5465721bcd46718->leave($__internal_d23121c0e6e45ab6ae1e235361f41f8824ac03aa1a35240cf5465721bcd46718_prof);

        
        $__internal_ec140141c387a55c6c80c04ebe43d0043f9f156d1516d1381d8259d5c8672258->leave($__internal_ec140141c387a55c6c80c04ebe43d0043f9f156d1516d1381d8259d5c8672258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
